<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Grade;
use App\User;
use App\MoneyOrder;
use App\Transaction;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $student= Student::all();
        return view('admin.siswa.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grade = Grade::all();
        $spp = MoneyOrder::all();
        return view('admin.siswa.tambah-siswa',compact('grade','spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'grade_id' => $request->grade_id,
            'grade_id' => $request->majors,
            'money_order_id' => $request->year
        ]);
        User::create([
            
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
            // 'level' => $request->level
        ]);

        return redirect('/admin/siswa')->with('sukses', 'Data Siswa Telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        
        return view('admin.siswa.detail-siswa',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
         $grade = Grade::all();
        $spp = MoneyOrder::all();
        return view('admin.siswa.edit-siswa', compact('student','spp','grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
       $student->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'grade_id' => $request->grade_id,
            'grade_id' => $request->majors,
            'money_order_id' => $request->year
        ]);

        return redirect('/admin/siswa')->with('update', 'Data Siswa Telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/admin/siswa')->with('delete', 'Data Siswa berhasil di hapus');

    }
    public function bayarSiswa(Student $student)
    {
        $pembayaran = Transaction::where('status', "=", "belum lunas")->get();

        $namaBulan = array(
            "Januari", "Februari", "Maret", "April", "Mei", "Juni", 
            "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        return view('admin.pembayaran.index', compact('student', 'namaBulan', 'pembayaran'));
    }
    public function tambahSpp(Request $request, Student $student, $bulan)
    {
        return view('admin.pembayaran.detail-pembayaran', compact('student', 'bulan'));
    }
    public function bayarSpp(Request $request, Student $student, $bulan)
    {
        $total_bayar = "";
        $lunas = $request->lunas;
        $nominal = $student->MoneyOrder->nominal/12;
        $status = "";
        if ($request->total_pay == $nominal OR !empty($lunas)) {
            $total_bayar = $nominal;
            $status = "lunas";
          
        }elseif ($request->total_pay < $nominal) {
            $total_bayar = $nominal;
            $status = "belum lunas";
        }
       
        $pembayaran = Transaction::create([
            'user_id' => auth()->user()->id,
            'student_id' => $student->id,
            'money_order_id' => $student->money_order_id,
            'pay_date' => date('Y-m-d'),
            'pay_month' => $bulan,
            'total_pay' => $total_bayar,
            'status' => $status,
            'payment_number' => $request->payment_number,
            'pay_year' => $request->pay_year
        ]);

        return redirect('/admin/siswa')->with('berhasil',$student->name. ' Telah melakukan pembayaran '.$pembayaran->status);
    }
   
}

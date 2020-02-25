<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\Student;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction, Student $student, $bulan)
    {
        return view('admin.pembayaran.edit-detail-pembayaran', compact('transaction', 'student', 'bulan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction, Student $student, $bulan)
    {
        $total_bayar = $request->total_pay;
        $total_sebelum = $transaction->total_pay;
        $nominal = $student->moneyOrder->nominal / 12 - $total_sebelum;
        $status = "";

        if ($total_bayar == $nominal) {
            $status = "lunas";
        }elseif ($total_bayar < $nominal) {
            $status = "belum lunas";
        }

        $transaction->update([
            'total_pay' => $total_sebelum+$total_bayar,
            'status' => $status
        ]);

        
        return redirect('/admin/siswa')->with('updatebayar',$student->name. ' Telah melakukan pembayaran '.$request->status);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace Database\Seeders;
use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voucher::create([
            'nama'  => 'Voucher Discount 1',
            'foto' => 'foto1',
            'kategori'  => 'discount',
            'status'  => '0',
        ]);

        Voucher::create([
            'nama'  => 'Voucher Cashback 1',
            'foto' => 'foto2',
            'kategori'  => 'cashback',
            'status'  => '0',
        ]);

        Voucher::create([
            'nama'  => 'Voucher Gift 1',
            'foto' => 'foto3',
            'kategori'  => 'gift',
            'status'  => '0',
        ]);

        Voucher::create([
            'nama'  => 'Voucher Discount 2',
            'foto' => 'foto4',
            'kategori'  => 'discount',
            'status'  => '0',
        ]);

        Voucher::create([
            'nama'  => 'Voucher Cashback 2',
            'foto' => 'foto5',
            'kategori'  => 'cashback',
            'status'  => '0',
        ]);

        Voucher::create([
            'nama'  => 'Voucher Gift 2',
            'foto' => 'foto6',
            'kategori'  => 'gift',
            'status'  => '0',
        ]);

        Voucher::create([
            'nama'  => 'Voucher Discount 3',
            'foto' => 'foto7',
            'kategori'  => 'discount',
            'status'  => '0',
        ]);
    }
}

<?php

namespace Database\Seeders;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
        [
            'N_id'=> 1,
            'user_id'=>1,
            'product_id'=>1,
            'jumlah'=>2,
            'tgl_masuk'=>Carbon::parse('2020-12-01'),
            'tgl_pengiriman'=>Carbon::parse('2020-12-04'),
        ]
        ]);
    }
}

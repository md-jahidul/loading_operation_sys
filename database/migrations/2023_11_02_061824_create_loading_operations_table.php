<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loading_operations', function (Blueprint $table) {
            $table->id()->comment('滞留データID');
            $table->string('factory_code', 2)->comment('工場コード');
            $table->dateTime('created_at')->comment('作成日付');
            $table->dateTime('updated_at')->comment('作成日付');
            $table->dateTime('date')->comment('日付');
            $table->string('customer_code', 5)->comment('得意先コード');
            $table->string('delivery_code', 4)->comment('納入先コード');
            $table->string('product_code', 4)->comment('銘柄コード');
            $table->string('product_name_code', 4)->comment('実品名コード');
            $table->integer('vehicle_type_specification')->nullable()->comment('車区分指定区分');
            $table->string('vehicle_number', 6)->comment('車輌番号');//this is the vehicle_number
            $table->dateTime('entry_time')->comment('入車時刻');
            $table->smallInteger('loading_terminal')->nullable()->comment('積込端末');
            $table->dateTime('loading_time')->comment('積込時刻')->nullable();
            $table->dateTime('scheduled_departure_time')->nullable()->comment('出車予定時刻');
            $table->string('departure_time', 8)->nullable()->comment('出車時刻');
            $table->smallInteger('status_type')->comment('状態区分');
            $table->tinyInteger('unit_type')->comment('単位区分');
            $table->integer('max_loading_capacity')->comment('最大積載量');
            $table->decimal('specified_quantity', 19, 4)->nullable()->comment('指定数量');//this is the product_amount
            $table->smallInteger('temperature')->nullable()->comment('温度');
            $table->integer('invoice_number')->comment('伝票番号');
            $table->integer('total_weight')->comment('総重量');
            $table->integer('empty_weight')->comment('空車重量');
            $table->tinyInteger('water_deduction_type')->comment('水引処理区分');
            $table->decimal('water_deduction_rate', 19, 4)->comment('水引率');
            $table->decimal('invoice_quantity', 19, 4)->comment('伝票数量');
            $table->tinyInteger('charter_type')->comment('傭車区分');
            $table->tinyInteger('transaction_type')->comment('取引区分');
            $table->string('carrier_code', 3)->nullable()->comment('傭車先コード');
            $table->string('factory_supplier', 4)->nullable()->comment('出荷工場仕入先');
            $table->integer('dispatch_schedule_sequence')->nullable()->comment('配車管理データSEQ');
            $table->integer('reservation_detail_sequence')->nullable()->comment('予約明細データSEQ');
            $table->tinyInteger('cash_transaction_flag')->comment('現金取引フラグ');
            $table->decimal('cash_sales_price', 19, 4)->nullable()->comment('現金売上単価');
            $table->decimal('cash_sales_amount', 19, 4)->nullable()->comment('現金売上金額');
            $table->decimal('cash_sales_tax', 19, 4)->nullable()->comment('現金売上消費税');
            $table->tinyInteger('transmission_flag')->comment('送信対象');
            $table->integer('sequence')->comment('SEQ');
            $table->tinyInteger('direct_loading_flag')->comment('積直指示フラグ');
            $table->dateTime('direct_loading_time')->nullable()->comment('積直指示時刻');
            $table->integer('direct_loading_capacity')->nullable()->comment('積直積載量');
            $table->decimal('direct_loading_quantity', 19, 4)->nullable()->comment('積直数量');
            $table->tinyInteger('temporary_deletion_flag')->comment('仮削除フラグ');
            $table->tinyInteger('final_deletion_flag')->comment('本削除フラグ');
            $table->string('vehicle_type_code', 3)->nullable()->comment('車種コード');
            $table->tinyInteger('regular_handling_flag')->nullable()->comment('常用扱フラグ');
            $table->integer('assign_driver')->comment(''); // This value is machinery_number
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loading_operations');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->float('price');
            $table->text('details');
            $table->text('manual');
            $table->string('image');
        });
        
        DB::table('products')->insert(['name' => 'table', 'price' => 3.75, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://picsum.photos/200']);
        DB::table('products')->insert(['name' => 'apfel', 'price' =>2.00, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://picsum.photos/200']);
        DB::table('products')->insert(['name' => 'affe', 'price' => 420.00, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://picsum.photos/200']);
        DB::table('products')->insert(['name' => 'elias', 'price' => 0.00, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://picsum.photos/200']);
        DB::table('products')->insert(['name' => 'el tony', 'price' => 2.50, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://picsum.photos/200']);
        DB::table('products')->insert(['name' => 'lamp', 'price' => 8.75, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://picsum.photos/200']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBrandPortfolioImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_brand_portfolio_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('portfolio_id');
            $table->string('url', 128)->default(null);
            $table->timestamps();

            $table->foreign('portfolio_id')->references('id')->on('m_brand_portfolio');
        });

        $t_brand_portfolio_images = array(
            array('id' => '1','portfolio_id' => '1','url' => 'https://bureusym.sirv.com/odanicola/gallery_mnc1.jpg','created_at' => '2020-06-01 23:19:42','updated_at' => NULL),
            array('id' => '2','portfolio_id' => '1','url' => 'https://bureusym.sirv.com/odanicola/gallery_mnc2.jpg','created_at' => '2020-06-01 23:26:49','updated_at' => NULL),
            array('id' => '3','portfolio_id' => '2','url' => 'https://bureusym.sirv.com/odanicola/gallery_warcloth1.jpg','created_at' => '2020-06-02 21:27:58','updated_at' => NULL),
            array('id' => '4','portfolio_id' => '2','url' => 'https://bureusym.sirv.com/odanicola/gallery_warcloth2.jpg','created_at' => '2020-06-02 21:27:58','updated_at' => NULL),
            array('id' => '5','portfolio_id' => '3','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinic1.jpg','created_at' => '2020-06-02 21:30:06','updated_at' => NULL),
            array('id' => '6','portfolio_id' => '3','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinic2.jpg','created_at' => '2020-06-02 21:30:06','updated_at' => NULL),
            array('id' => '7','portfolio_id' => '3','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinic3.jpg','created_at' => '2020-06-02 21:32:25','updated_at' => NULL),
            array('id' => '8','portfolio_id' => '3','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinic4.jpg','created_at' => '2020-06-02 21:32:25','updated_at' => NULL),
            array('id' => '9','portfolio_id' => '3','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinic5.jpg','created_at' => '2020-06-02 21:32:25','updated_at' => NULL),
            array('id' => '10','portfolio_id' => '4','url' => 'https://bureusym.sirv.com/odanicola/gallery_epuskesmasng1.jpg','created_at' => '2020-06-02 22:14:04','updated_at' => NULL),
            array('id' => '11','portfolio_id' => '4','url' => 'https://bureusym.sirv.com/odanicola/gallery_epuskesmasng2.jpg','created_at' => '2020-06-02 22:14:04','updated_at' => NULL),
            array('id' => '12','portfolio_id' => '5','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinicmonitoring1.jpg','created_at' => '2020-06-02 22:18:10','updated_at' => NULL),
            array('id' => '13','portfolio_id' => '5','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinicmonitoring2.jpg','created_at' => '2020-06-02 22:18:42','updated_at' => NULL),
            array('id' => '14','portfolio_id' => '5','url' => 'https://bureusym.sirv.com/odanicola/gallery_eclinicmonitoring3.jpg','created_at' => '2020-06-02 22:18:42','updated_at' => NULL),
            array('id' => '15','portfolio_id' => '6','url' => 'https://bureusym.sirv.com/odanicola/gallery_ecliniclandingpage1.jpg','created_at' => '2020-06-02 22:21:01','updated_at' => NULL),
            array('id' => '16','portfolio_id' => '6','url' => 'https://bureusym.sirv.com/odanicola/gallery_ecliniclandingpage2.jpg','created_at' => '2020-06-02 22:21:01','updated_at' => NULL),
            array('id' => '17','portfolio_id' => '6','url' => 'https://bureusym.sirv.com/odanicola/gallery_ecliniclandingpage3.jpg','created_at' => '2020-06-02 22:21:01','updated_at' => NULL),
            array('id' => '18','portfolio_id' => '7','url' => 'https://bureusym.sirv.com/odanicola/gallery_ebidan1.jpg','created_at' => '2020-06-02 22:22:48','updated_at' => NULL),
            array('id' => '19','portfolio_id' => '7','url' => 'https://bureusym.sirv.com/odanicola/gallery_ebidan2.jpg','created_at' => '2020-06-02 22:22:48','updated_at' => NULL),
            array('id' => '20','portfolio_id' => '7','url' => 'https://bureusym.sirv.com/odanicola/gallery_ebidan3.jpg','created_at' => '2020-06-02 22:22:48','updated_at' => NULL),
            array('id' => '21','portfolio_id' => '7','url' => 'https://bureusym.sirv.com/odanicola/gallery_ebidan4.jpg','created_at' => '2020-06-02 22:22:48','updated_at' => NULL),
            array('id' => '22','portfolio_id' => '7','url' => 'https://bureusym.sirv.com/odanicola/gallery_ebidan5.jpg','created_at' => '2020-06-02 22:22:48','updated_at' => NULL),
            array('id' => '23','portfolio_id' => '8','url' => 'https://bureusym.sirv.com/odanicola/gallery_ebidanapp1.jpg','created_at' => '2020-06-02 22:25:50','updated_at' => NULL),
            array('id' => '24','portfolio_id' => '9','url' => 'https://bureusym.sirv.com/odanicola/gallery_infokesapp1.jpg','created_at' => '2020-06-02 22:28:34','updated_at' => NULL),
            array('id' => '25','portfolio_id' => '9','url' => 'https://bureusym.sirv.com/odanicola/gallery_infokesapp2.jpg','created_at' => '2020-06-02 22:28:34','updated_at' => NULL),
            array('id' => '26','portfolio_id' => '9','url' => 'https://bureusym.sirv.com/odanicola/gallery_infokesapp3.jpg','created_at' => '2020-06-02 22:28:34','updated_at' => NULL)
        );

        DB::table('t_brand_portfolio_images')->insert($t_brand_portfolio_images);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_brand_portfolio_images');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MBrandPortfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_brand_portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128)->default(null);
            $table->string('subtitle', 128)->default(null)->nullable(true);
            $table->string('description', 255)->default(null)->nullable(true);
            $table->string('year', 4)->default(null)->nullable(true);
            $table->string('feature_image')->default(null)->nullable(true);
            $table->string('order')->default('0');
            $table->enum('status',['0','1'])->default('1');
            $table->timestamps();
        });

        $m_brand_portfolio = array(
            array('id' => '1','title' => 'MNC Gramedia','subtitle' => 'Kompas Gramedia','description' => 'Build a web catalogue of MNC Gramedia Comics using MVC Framework.','year' => '2015','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_mnc.jpg','order' => '1','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '2','title' => 'Warning Clothing','subtitle' => 'Warning Clothing Bandung','description' => 'Build a web commerce for a local brand in Bandung (warning clothing) using Shopify','year' => '2018','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_warningclothing.jpg','order' => '2','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '3','title' => 'eClinic','subtitle' => 'PT. Infokes Indonesia','description' => 'Build a health management system for Clinics','year' => '2016','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_eclinic.jpg','order' => '3','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '4','title' => 'ePuskesmas NG','subtitle' => 'PT. Infokes Indonesia','description' => 'Build a health management system for Puskesmas','year' => '2019','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_epuskesmasng.jpg','order' => '4','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '5','title' => 'eClinic Monitoring','subtitle' => 'PT. Infokes Indonesia','description' => 'Build monitoring system for eClinic usage','year' => '2016','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_eclinicmonitoring.jpg','order' => '5','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '6','title' => 'eClinic Landing Page','subtitle' => 'PT. Infokes Indonesia','description' => 'Build eClinic Landing Page (Brand Profile)','year' => '2016','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_ecliniclandingpage.jpg','order' => '6','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '7','title' => 'eBidan','subtitle' => 'PT. Infokes Indonesia','description' => 'Build system information of recording the history of pregnancy of the Mother and Antenatal Care (ANC)','year' => '2019','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_ebidan.jpg','order' => '7','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '8','title' => 'eBidan (Android Web-view)','subtitle' => 'PT. Infokes Indonesia','description' => 'Build android web-view for eBidan','year' => '2019','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_ebidanapp.jpg','order' => '8','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL),
            array('id' => '9','title' => 'Infokes Mobile (Android / IOS) ','subtitle' => 'PT. Infokes Indonesia','description' => 'Improve and continue on going enhancements of current Infokes Mobile App both Android & IOS (current role)','year' => '2019','feature_image' => 'https://bureusym.sirv.com/odanicola/portfolio_infokesmobile.jpg','order' => '9','status' => '1','created_at' => '2020-06-01 13:56:37','updated_at' => NULL)
        );

        DB::table('m_brand_portfolio')->insert($m_brand_portfolio);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_brand_portfolio');
    }
}

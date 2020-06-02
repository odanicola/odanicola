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

        $data = [
            [
                'title' => "MNC Gramedia",
                'subtitle' => "Kompas Gramedia",
                'year' => '2015',
                'description' => "Build a web catalogue of MNC Gramedia Comics using MVC Framework.",
                'feature_image' => "portfolio_mnc.jpg",
                'order' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "Warning Clothing",
                'subtitle' => "Warning Clothing Bandung",
                'year' => '2018',
                'description' => "Build a web commerce for a local brand in Bandung (warning clothing) using Shopify",
                'feature_image' => "portfolio_warningclothing.jpg",
                'order' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "eClinic",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2016',
                'description' => "Build a health management system for Clinics",
                'feature_image' => "portfolio_eclinic.jpg",
                'order' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "ePuskesmas NG",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2019',
                'description' => "Build a health management system for Puskesmas",
                'feature_image' => "portfolio_epuskesmasng.jpg",
                'order' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "eClinic Monitoring",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2016',
                'description' => "Build monitoring system for eClinic usage",
                'feature_image' => "portfolio_eclinicmonitoring.jpg",
                'order' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "eClinic Landing Page",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2016',
                'description' => "Build eClinic Landing Page (Brand Profile)",
                'feature_image' => "portfolio_ecliniclandingpage.jpg",
                'order' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "eBidan",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2019',
                'description' => "Build system information of recording the history of pregnancy of the Mother and Antenatal Care (ANC)",
                'feature_image' => "portfolio_ebidan.jpg",
                'order' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "eBidan (Android Web-view)",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2019',
                'description' => "Build android web-view for eBidan",
                'feature_image' => "portfolio_ebidanapp.jpg",
                'order' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
            [
                'title' => "Infokes Mobile (Android / IOS) ",
                'subtitle' => "PT. Infokes Indonesia",
                'year' => '2019',
                'description' => "Improve and continue on going enhancements of current Infokes Mobile App both Android & IOS (current role)",
                'feature_image' => "portfolio_infokesmobile.jpg",
                'order' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                
            ],
        ];

        DB::table('m_brand_portfolio')->insert($data);
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

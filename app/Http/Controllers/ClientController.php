<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;
use Elastica\Client as ElasticaClient;


class ClientController extends Controller
{
    //Elasticsearch-php Client

    protected  $elasticsearch;

    //Elastica Client

    protected $elastica;

    // Set up our clients
    public function __construct()
    {
        $this->elasticsearch = ClientBuilder::create()->build();
        $elasticaConfig = [
            'host' => 'localhost',
            'port' => 9200,
            'index' => 'pets'
        ];
        $this->elastica = new ElasticaClient($elasticaConfig);
    }


    //Test elasticsearch-php  client
    public function elasticSearchTest()
    {
        dump($this->elasticsearch);

        echo "\n\nRetrieve  a document:\n";


        $params = [
            'index' => 'pets',
            'TypesSeeder' => 'dog',
            'id' => '1'
        ];

//        $response = $this->elasticsearch->get($params);
//        dump($response);

    }



}

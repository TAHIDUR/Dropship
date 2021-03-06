<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

use AliexApi\Configuration\GenericConfiguration;
use AliexApi\AliexIO;
use AliexApi\Operations\ListProducts;

class Products extends Controller
{
    public function aliconfig($conf)
    {
        $conf
            ->setApiKey('ALI_API_KEY')
            ->setTrackingKey('ALI_TRACKING_ID')
            ->setDigitalSign('ALI_DIGITAL_SIGNATURE');
            return $conf;
    }

    public function index()
    {
        $this->searchItems();
    }

    public function searchItems()
    {
        $lppfields = [
            // 'categoryId' => '1501',
            'keywords' => 'baby shoes',
            ];
        $array = $this->listPromotionProduct($lppfields);
        dd($array);
    }

    public function listPromotionProduct($lppfields)
    {
        $conf = new GenericConfiguration();
        $this->aliconfig($conf);
        $aliexIO = new AliexIO($conf);

        $listproducts = new ListProducts();
        $listproducts->setFields('productId,productTitle,productUrl,imageUrl');
        $listproducts->setKeywords($lppfields['keywords']);
        // $listproducts->setCategoryId($lppfields['categoryId']);
        $listproducts->setHighQualityItems('true');

        $formattedResponse = $aliexIO->runOperation($listproducts);
        $array = json_decode($formattedResponse, true);

        $array = array_merge($array, $lppfields);

        return $array;

    }

    public function getPromotionLinks()
    {
        $conf = new GenericConfiguration();
        $this->aliconfig($conf);
        $aliexIO = new AliexIO($conf);

        $listproducts = new GetLinks();
        $listproducts->setFields('url,promotionUrl');
        $listproducts->setTrackingId('ALI_TRACKING_ID');
        $listproducts->setUrls('http://url1, http://url2');

        $formattedResponse = $aliexIO->runOperation($listproducts);
        $array = json_decode($formattedResponse, true);
        return $array;
    }
}

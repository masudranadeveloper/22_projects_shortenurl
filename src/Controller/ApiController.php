<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Network\Response;

class ApiController extends Controller
{
    public function adsaupdate()
    {
        // Load the User model
        $this->loadModel('ads');
        $ads_db = $this->ads->get(1);

        $ads_db-> st1_page_top_ads = $this->request->query('st1_page_top_ads');
        $ads_db-> st1_page_1st_img_ads = $this->request->query('st1_page_1st_img_ads');
        $ads_db-> st1_page_2nd_img_ads = $this->request->query('st1_page_2nd_img_ads');
        $ads_db-> st1_page_3rd_img_ads = $this->request->query('st1_page_3rd_img_ads');
        $ads_db-> st1_page_bottom_ads = $this->request->query('st1_page_bottom_ads');

        $ads_db-> nd2_page_top_ads = $this->request->query('nd2_page_top_ads');
        $ads_db-> nd2_page_1st_img_ads = $this->request->query('nd2_page_1st_img_ads');
        $ads_db-> nd2_page_2nd_img_ads = $this->request->query('nd2_page_2nd_img_ads');
        $ads_db-> nd2_page_3rd_img_ads = $this->request->query('nd2_page_3rd_img_ads');
        $ads_db-> nd2_page_bottom_ads = $this->request->query('nd2_page_bottom_ads');

        $ads_db-> rd3_page_top_ads = $this->request->query('rd3_page_top_ads');
        $ads_db-> rd3_page_1st_img_ads = $this->request->query('rd3_page_1st_img_ads');
        $ads_db-> rd3_page_2nd_img_ads = $this->request->query('rd3_page_2nd_img_ads');
        $ads_db-> rd3_page_3rd_img_ads = $this->request->query('rd3_page_3rd_img_ads');
        $ads_db-> rd3_page_bottom_ads = $this->request->query('rd3_page_bottom_ads');

        $ads_db-> th4_page_top_ads = $this->request->query('th4_page_top_ads');
        $ads_db-> th4_page_1st_img_ads = $this->request->query('th4_page_1st_img_ads');
        $ads_db-> th4_page_2nd_img_ads = $this->request->query('th4_page_2nd_img_ads');
        $ads_db-> th4_page_3rd_img_ads = $this->request->query('th4_page_3rd_img_ads');
        $ads_db-> th4_page_bottom_ads = $this->request->query('th4_page_bottom_ads');

        $ads_db-> th5_page_top_ads = $this->request->query('th5_page_top_ads');
        $ads_db-> th5_page_1st_img_ads = $this->request->query('th5_page_1st_img_ads');
        $ads_db-> th5_page_2nd_img_ads = $this->request->query('th5_page_2nd_img_ads');
        $ads_db-> th5_page_3rd_img_ads = $this->request->query('th5_page_3rd_img_ads');
        $ads_db-> th5_page_bottom_ads = $this->request->query('th5_page_bottom_ads');

        $ads_db-> pop_alert = $this->request->query('pop_alert');

        $this->ads->save($ads_db);


        // Your code goes here
        $this->autoRender = false;
        echo json_encode(['success' => true]);
    }
}

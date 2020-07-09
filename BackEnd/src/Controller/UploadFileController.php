<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UploadFileController extends AbstractController
{
    /**
     * @Route("/uploadFile", name="upload_file")
     */
    public function index(Request $request)
    {
     	$datas = $request->files->get('file');

      if (!is_array($datas)) 
        {
          $datas = [$datas];
        }

      for ($i = 0; $i < count($datas); $i++) 
        {
         $data=$datas[$i]; 
              
         $fileName = $data->getClientOriginalName();
         $data->move($this->getParameter('directory'),$fileName); 
        }
        
       echo $data; exit;

     return $this->json($data);
    }
}

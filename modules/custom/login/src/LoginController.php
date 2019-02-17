<?php

namespace Drupal\login\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;

class LoginController extends ControllerBase
{
    public function indexAction()
    {
        if(\Drupal::request()->isMethod('POST')) {
            $request = \Drupal::request()->request->all();
            $id = $this->getUserId($request['username'], $request['password']);
            if(!is_null($id)) {
               $_SESSION['loginId'] = $id;
                $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
               $response = new TrustedRedirectResponse($actual_link . '/shop/product-overview');
            //    $response->setTargetUrl(\Drupal::url('/product-overview'));

               return $response;
                // header('Location: https://facebook.com');
               
            }
        }
        return [
            '#theme' => 'display_login'
           
        ];
    }

    /**
     * @param $username
     * @param $password
     * @return null
     */
    private function getUserId($username, $password)
    {
        $db = \Drupal::database();
        $sth = $db->prepare("SELECT id FROM customer WHERE username = :username AND password = :password");
        $sth->execute([':username' => $username, ':password' => $password]);
        $result = $sth->fetch(\PDO::FETCH_ASSOC);

        return isset($result['id']) ? $result['id'] : null;
    }
}
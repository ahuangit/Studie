<?php
/**
 * Created by PhpStorm.
 * User: wav18
 * Date: 25/07/14
 * Time: 10:04
 */

namespace Troiswa\PublicBundle\Tests;

require 'autoloader.php';


use Troiswa\PublicBundle\Entity\Categorie;

class CategorieTest extends \PHPUnit_Framework_TestCase {


    public function testTrue(){
        $oCategory = new Categorie();
        $oCategory->setTitre('title');
        $this->assertEquals('title',$oCategory->getTitre());
    }
}
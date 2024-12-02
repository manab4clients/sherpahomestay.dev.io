<?php

/**
 * ScanDirectory Class
 *
 * @category  PHP Static
 * @package   ScanDirectory
 * @author    Manabendra Jha <manabendra.jha@citytask.com>
 * @copyright GPL Licence
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @link      http://github.com/joshcam/PHP-MySQLi-Database-Class
 * @version   1.0
 * @date   			13/12/2020
 * 
    *$galPath = 'assets/img/gallery';
    *$objScanDIR = new ScanDirectory($galPath, 1);
    *$imgList = $objScanDIR->getList();
    *echo "<pre>";
    * print_r($imgList);
    * die();
    *foreach ($imgList as $img):
    *$src =  $galPath . '/' . $img['basename'];
    *$alt =  'Maynaguri College NCC Activities';
 * 
 */

class ScanDirectory
{
    private $getFiles;
    private $scanType;
    private $pathParts;
    private $result = [];
    private $pathNull = false;
    private $errMsg = "";

    function __construct($path = null, $type = null)
    {
        $this->pathNull = $path == "" ? true : false;
        $this->getFiles = glob($path . "/*");
        $this->scanType = $type;
    }

    /**
     * A method of returning all files and directory
     * from supplied path.
     * @uses $objScanDirectory = new ScanDirectory($path,$type);
     * @param		$path -> Should pass a valid path
     * @param		$type -> (optional) 1= Only files, 2= Only Directory, default = All
     * @return Array value
     */

    public function getList()
    {
        if ($this->pathNull == false):
            foreach ($this->getFiles as $file):
                $this->pathParts = pathinfo($file);
                switch ($this->scanType) {
                        // Only files
                    case "1":
                        if (array_key_exists("extension", $this->pathParts)):
                            $this->result[] = $this->pathParts;
                        endif;
                        break;
                        // Only directory
                    case "2":
                        if (!array_key_exists("extension", $this->pathParts)):
                            $this->result[] = $this->pathParts;
                        endif;
                        break;
                    default:
                        $this->result[] = $this->pathParts;
                }
            endforeach;
        endif;

        if (count($this->result) > 0) {
            return $this->result;
        } else {
            if ($this->pathNull == true) {
                $this->errMsg = 'Argument missing! No valid path supplied!';
            } else {
                $this->errMsg = 'No data found!';
            }
            return $this->errMsg;
        }
    }
}

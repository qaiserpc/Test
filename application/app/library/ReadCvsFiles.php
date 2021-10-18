<?php
/**
 * Created by PhpStorm.
 * User: qaisernaeem
 * Date: 2021-10-18
 * Time: 10:38
 */

class ReadCvsFiles
{


    /**
     * @var string
     */
    protected $path;


    protected $cvsContent;

    /**
     * @var array
     */
    protected $columnNames;

    /**
     * @var array
     */
    protected $selectedColumnsNames;
    /**
     * @var array
     */
    protected $columnsData = [];

    /**
     * ReadCvsFiles constructor.
     * @param string $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * @return array|false|null
     */
    public function readCvsFile()
    {
        if (($handle = fopen($this->path, "r")) !== FALSE) {
            $i = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $this->cvsContent[$i] = $data;
                $i++;
            }
        }
    }

    /**
     * get all columns names
     */
    public function readAllColumns()
    {
        $this->columnNames = $this->cvsContent[0];
    }

    /**
     * get selected columns names
     */
    public function selectedColumns()
    {
        foreach ($this->columnNames as $key => $value)
        {
            if ($value == 'name') {
                $this->selectedColumnsNames[] = $value;
            }
            else if ($value == 'item_code'){
                $this->selectedColumnsNames[] = $value;
            }
            else if ($value == 'modelId')
            {
                $this->selectedColumnsNames[] = $value;
            }
        }
    }


    public function readProdcuts()
    {

    }

    public function readProductReviews()
    {

    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }





}
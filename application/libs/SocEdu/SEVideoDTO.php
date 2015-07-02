<?php

/**
 * class SEVideoDTO
 * 
 */
class SEVideoDTO
{

    /** Aggregations: */

    /** Compositions: */

     /*** Attributes: ***/

    /**
     * 
     * @access private
     */
    private $mURL;
    /**
     * 
     * @access private
     */
    private $miID;
    /**
     * 
     * @access private
     */
    private $mDescription;
    /**
     * 
     * @access private
     */
    private $mDate;




    /**
     * initAttributes sets all SEVideoDTO attributes to its default value. Make sure to
     * call this method within your class constructor
     */
    private function initAttributes()
    {
        $this->miID = 0;
        $this->mURL = "";
        $this->mDescription = "";
        $this->mDate = "";
    }

    /**
     * Default constructor
     */
    function __construct() {
        $this->initAttributes();
    }
    
    //Getters and setters begin here
    public function getMURL() {
        return $this->mURL;
    }

    public function getMiID() {
        return $this->miID;
    }

    public function getMDescription() {
        return $this->mDescription;
    }

    public function getMDate() {
        return $this->mDate;
    }

    public function setMURL($mURL) {
        $this->mURL = $mURL;
        return $this;
    }

    public function setMiID($miID) {
        $this->miID = $miID;
        return $this;
    }

    public function setMDescription($mDescription) {
        $this->mDescription = $mDescription;
        return $this;
    }

    public function setMDate($mDate) {
        $this->mDate = $mDate;
        return $this;
    }
    //Getters and setters end here
    
    /**
     * Helper function to substitute for a parametrized constructor
     * @param String $inURL
     * @param String $inDate
     * @param String $inDescription
     * @param int $iniID
     */
    public static function initEntireClass($inURL, $inDate, $inDescription, $iniID) {
        $instance = new self();
        $instance->setMURL($inURL);
        $instance->setMDate($inDate);
        $instance->setMDescription($inDescription);
        $instance->setMiID($iniID);
        return $instance;
    }

} // end of SEVideoDTO

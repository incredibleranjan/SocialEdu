<?php

/**
 * class SBUserDTO
 * 
 */
class SBUserDTO {
    /** Aggregations: */
    /** Compositions: */
    /*     * * Attributes: ** */

    /**
     * 
     * @access private
     */
    private $mUserName;

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
     * 
     * @access private
     */
    private $mPassword;

    /**
     * 
     * @access private
     */
    private $mEmail;

    /**
     * initAttributes sets all SEVideoDTO attributes to its default value. Make sure to
     * call this method within your class constructor
     */
    private function initAttributes() {
        
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
    public function getMUserName() {
        return $this->mUserName;
    }

    public function getMPassword() {
        return $this->mPassword;
    }

    public function getMEmail() {
        return $this->mEmail;
    }

    public function setMUserName($mUserName) {
        $this->mUserName = $mUserName;
    }

    public function setMPassword($mPassword) {
        $this->mPassword = $mPassword;
    }

    public function setMEmail($mEmail) {
        $this->mEmail = $mEmail;
    }

    //Getters and setters end here

    /**
     * Initliaze SBUserDTO with Login credentials passed
     * @param type $inUserName
     * @param type $inPassword
     */
    public static function withLoginDetails($inUserName, $inPassword) {
        echo $inUserName;
        $instance = new self();
        $instance->setMUserName($inUserName);
        $instance->setMPassword($inPassword);
        return $instance;
    }

}

// end of SEVideoDTO

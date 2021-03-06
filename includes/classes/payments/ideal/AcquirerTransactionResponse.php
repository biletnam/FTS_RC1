<?php

/* ******************************************************************************
 * History: 
 * $Log$
 * 
 * ****************************************************************************** 
 * Date : $Date$ 
 * Revision : $Revision$ 
 * ******************************************************************************
 */

/**
 * Contains all response information for a transaction request
 *
 */
class AcquirerTransactionResponse
{
    var $acquirerID;
    var $issuerAuthenticationURL;
    var $transactionID;
	var $purchaseID;
	var $errorMessage = false;
	
    /**
     * @return Returns the acquirerID.
     */
    function getAcquirerID() 
    {
        return $this->acquirerID;
    }
    /**
     * @param acquirerID The acquirerID to set. (mandatory)
     */
    function setAcquirerID( $acquirerID ) 
    {
        $this->acquirerID = $acquirerID;
    }
    /**
     * @return Returns the issuerAuthenticationURL.
     */
    function getIssuerAuthenticationURL() 
    {
        return $this->issuerAuthenticationURL;
    }
    /**
     * @param issuerAuthenticationURL The issuerAuthenticationURL to set.
     */
    function setIssuerAuthenticationURL( $issuerAuthenticationURL )
    {
        $this->issuerAuthenticationURL = $issuerAuthenticationURL;
    }
   
    /**
     * @return Returns the transactionID.
     */
    function getTransactionID() 
    {
        return $this->transactionID;
    }
    /**
     * @param transactionID The transactionID to set.
     */
    function setTransactionID( $transactionID ) 
    {
        $this->transactionID = $transactionID;
    }
    /**
     * @return Returns the purchaseID.
     */
    function getPurchaseID() 
    {
        return $this->purchaseID;
    }
    /**
     * @param purchaseID The purchaseID to set. (mandatory)
     */
    function setPurchaseID( $purchaseID ) 
    {
        $this->purchaseID = $purchaseID;
    }   

	function IsResponseError()
	{
		return false;
	}
	 
}

?>
<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FPS
 *  @copyright   Copyright 2008-2009 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2010-08-28
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FPS PHP5 Library
 *  Generated: Wed Jun 15 05:50:14 GMT+00:00 2011
 * 
 */

/**
 * Get Tokens  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon FPS
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_FPS_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_FPS
 * responses without calling Amazon_FPS service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/FPS/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_FPS_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Get Tokens Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_GetTokensRequest
 // object or array of parameters
 // invokeGetTokens($service, $request);

                                                                            
/**
  * Get Tokens Action Sample
  * 
  * Returns a list of tokens installed on the given account.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_GetTokens or array of parameters
  */
  function invokeGetTokens(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->getTokens($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetTokensResponse\n");
                if ($response->isSetGetTokensResult()) { 
                    echo("            GetTokensResult\n");
                    $getTokensResult = $response->getGetTokensResult();
                    $tokenList = $getTokensResult->getToken();
                    foreach ($tokenList as $token) {
                        echo("                Token\n");
                        if ($token->isSetTokenId()) 
                        {
                            echo("                    TokenId\n");
                            echo("                        " . $token->getTokenId() . "\n");
                        }
                        if ($token->isSetFriendlyName()) 
                        {
                            echo("                    FriendlyName\n");
                            echo("                        " . $token->getFriendlyName() . "\n");
                        }
                        if ($token->isSetTokenStatus()) 
                        {
                            echo("                    TokenStatus\n");
                            echo("                        " . $token->getTokenStatus() . "\n");
                        }
                        if ($token->isSetDateInstalled()) 
                        {
                            echo("                    DateInstalled\n");
                            echo("                        " . $token->getDateInstalled() . "\n");
                        }
                        if ($token->isSetCallerReference()) 
                        {
                            echo("                    CallerReference\n");
                            echo("                        " . $token->getCallerReference() . "\n");
                        }
                        if ($token->isSetTokenType()) 
                        {
                            echo("                    TokenType\n");
                            echo("                        " . $token->getTokenType() . "\n");
                        }
                        if ($token->isSetOldTokenId()) 
                        {
                            echo("                    OldTokenId\n");
                            echo("                        " . $token->getOldTokenId() . "\n");
                        }
                        if ($token->isSetPaymentReason()) 
                        {
                            echo("                    PaymentReason\n");
                            echo("                        " . $token->getPaymentReason() . "\n");
                        }
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_FPS_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                                                        

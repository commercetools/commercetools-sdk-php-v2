<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionAWSLambdaDestination extends ExtensionDestination
{
    
    const FIELD_ARN = 'arn';
    const FIELD_ACCESS_KEY = 'accessKey';
    const FIELD_ACCESS_SECRET = 'accessSecret';

    /**
     *
     * @return string|null
     */
    public function getArn();
    
    /**
     *
     * @return string|null
     */
    public function getAccessKey();
    
    /**
     *
     * @return string|null
     */
    public function getAccessSecret();
    public function setArn(?string $arn): void;
    
    public function setAccessKey(?string $accessKey): void;
    
    public function setAccessSecret(?string $accessSecret): void;
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationModel;

class SqsDestinationModel extends DestinationModel implements SqsDestination {
    const DISCRIMINATOR_VALUE = 'SQS';

    /**
     * @var string
     */
    protected $accessKey;
    /**
     * @var string
     */
    protected $accessSecret;
    /**
     * @var string
     */
    protected $queueURL;
    /**
     * @var string
     */
    protected $region;

    /**
     * @return string
     */
    public function getAccessKey()
    {
        if (is_null($this->accessKey)) {
            $value = $this->raw(SqsDestination::FIELD_ACCESS_KEY);
            $value = (string)$value;
            $this->accessKey = $value;
        }
        return $this->accessKey;
    }
    /**
     * @return string
     */
    public function getAccessSecret()
    {
        if (is_null($this->accessSecret)) {
            $value = $this->raw(SqsDestination::FIELD_ACCESS_SECRET);
            $value = (string)$value;
            $this->accessSecret = $value;
        }
        return $this->accessSecret;
    }
    /**
     * @return string
     */
    public function getQueueURL()
    {
        if (is_null($this->queueURL)) {
            $value = $this->raw(SqsDestination::FIELD_QUEUE_URL);
            $value = (string)$value;
            $this->queueURL = $value;
        }
        return $this->queueURL;
    }
    /**
     * @return string
     */
    public function getRegion()
    {
        if (is_null($this->region)) {
            $value = $this->raw(SqsDestination::FIELD_REGION);
            $value = (string)$value;
            $this->region = $value;
        }
        return $this->region;
    }

    /**
     * @param string $accessKey
     * @return $this
     */
    public function setAccessKey(string $accessKey)
    {
        $this->accessKey = (string)$accessKey;

        return $this;
    }
    /**
     * @param string $accessSecret
     * @return $this
     */
    public function setAccessSecret(string $accessSecret)
    {
        $this->accessSecret = (string)$accessSecret;

        return $this;
    }
    /**
     * @param string $queueURL
     * @return $this
     */
    public function setQueueURL(string $queueURL)
    {
        $this->queueURL = (string)$queueURL;

        return $this;
    }
    /**
     * @param string $region
     * @return $this
     */
    public function setRegion(string $region)
    {
        $this->region = (string)$region;

        return $this;
    }

}

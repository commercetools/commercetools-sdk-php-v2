<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationModel;

class SnsDestinationModel extends DestinationModel implements SnsDestination {
    const DISCRIMINATOR_VALUE = 'SNS';

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
    protected $topicArn;

    /**
     * @return string
     */
    public function getAccessKey()
    {
        if (is_null($this->accessKey)) {
            $value = $this->raw(SnsDestination::FIELD_ACCESS_KEY);
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
            $value = $this->raw(SnsDestination::FIELD_ACCESS_SECRET);
            $value = (string)$value;
            $this->accessSecret = $value;
        }
        return $this->accessSecret;
    }
    /**
     * @return string
     */
    public function getTopicArn()
    {
        if (is_null($this->topicArn)) {
            $value = $this->raw(SnsDestination::FIELD_TOPIC_ARN);
            $value = (string)$value;
            $this->topicArn = $value;
        }
        return $this->topicArn;
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
     * @param string $topicArn
     * @return $this
     */
    public function setTopicArn(string $topicArn)
    {
        $this->topicArn = (string)$topicArn;

        return $this;
    }

}

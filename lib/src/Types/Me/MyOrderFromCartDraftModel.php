<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class MyOrderFromCartDraftModel extends JsonObjectModel implements MyOrderFromCartDraft
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $version;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(MyOrderFromCartDraft::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(MyOrderFromCartDraft::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }

}

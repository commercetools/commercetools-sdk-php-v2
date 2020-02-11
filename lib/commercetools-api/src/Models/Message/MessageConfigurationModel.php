<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class MessageConfigurationModel extends JsonObjectModel implements MessageConfiguration
{

    /**
     * @var ?bool
     */
    protected $enabled;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;


    public function __construct(
        bool $enabled = null,
        int $deleteDaysAfterCreation = null
    ) {
        $this->enabled = $enabled;
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

    }

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        if (is_null($this->enabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MessageConfiguration::FIELD_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->enabled = (bool) $data;
        }

        return $this->enabled;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        if (is_null($this->deleteDaysAfterCreation)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MessageConfiguration::FIELD_DELETE_DAYS_AFTER_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterCreation = (int) $data;
        }

        return $this->deleteDaysAfterCreation;
    }

    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
    }



}

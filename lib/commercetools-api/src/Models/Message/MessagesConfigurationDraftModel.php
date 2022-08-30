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

/**
 * @internal
 */
final class MessagesConfigurationDraftModel extends JsonObjectModel implements MessagesConfigurationDraft
{
    /**
     *
     * @var ?bool
     */
    protected $enabled;

    /**
     *
     * @var ?int
     */
    protected $deleteDaysAfterCreation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $enabled = null,
        ?int $deleteDaysAfterCreation = null
    ) {
        $this->enabled = $enabled;
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
    }

    /**
     * <p>Setting to <code>true</code> activates the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *
     *
     * @return null|bool
     */
    public function getEnabled()
    {
        if (is_null($this->enabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->enabled = (bool) $data;
        }

        return $this->enabled;
    }

    /**
     * <p>Specifies the number of days each Message should be available via the <a href="/../api/projects/messages">Messages Query</a> API. For Messages older than the specified period, it is not guaranteed that they are still accessible via the API.</p>
     *
     *
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        if (is_null($this->deleteDaysAfterCreation)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterCreation = (int) $data;
        }

        return $this->deleteDaysAfterCreation;
    }


    /**
     * @param ?bool $enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @param ?int $deleteDaysAfterCreation
     */
    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
    }
}

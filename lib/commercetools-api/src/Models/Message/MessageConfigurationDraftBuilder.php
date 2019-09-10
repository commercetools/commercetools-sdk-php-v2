<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MessageConfigurationDraft>
 */
final class MessageConfigurationDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $deleteDaysAfterCreation;

    /**
     * @var ?bool
     */
    private $enabled;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        return $this->deleteDaysAfterCreation;
    }

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function build(): MessageConfigurationDraft
    {
        return new MessageConfigurationDraftModel(
            $this->deleteDaysAfterCreation,
            $this->enabled
        );
    }

    public static function of(): MessageConfigurationDraftBuilder
    {
        return new self();
    }
}

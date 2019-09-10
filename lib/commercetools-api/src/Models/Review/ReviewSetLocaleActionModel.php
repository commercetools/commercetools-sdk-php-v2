<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObjectModel;

final class ReviewSetLocaleActionModel extends JsonObjectModel implements ReviewSetLocaleAction
{
    const DISCRIMINATOR_VALUE = 'setLocale';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $locale;

    public function __construct(
        string $action = null,
        string $locale = null
    ) {
        $this->action = $action;
        $this->locale = $locale;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewSetLocaleAction::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
}

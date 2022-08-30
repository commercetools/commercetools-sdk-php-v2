<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewSetTextActionModel extends JsonObjectModel implements ReviewSetTextAction
{
    public const DISCRIMINATOR_VALUE = 'setText';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $text;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $text = null,
        ?string $action = null
    ) {
        $this->text = $text;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     *
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }


    /**
     * @param ?string $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}

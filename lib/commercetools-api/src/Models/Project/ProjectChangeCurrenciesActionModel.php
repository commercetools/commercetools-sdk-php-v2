<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangeCurrenciesActionModel extends JsonObjectModel implements ProjectChangeCurrenciesAction
{
    public const DISCRIMINATOR_VALUE = 'changeCurrencies';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $currencies;


    public function __construct(
        array $currencies = null
    ) {
        $this->currencies = $currencies;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>A three-digit currency code as per currency code.</p>
     *
     * @return null|array
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(self::FIELD_CURRENCIES);
            if (is_null($data)) {
                return null;
            }
            $this->currencies = $data;
        }

        return $this->currencies;
    }


    public function setCurrencies(?array $currencies): void
    {
        $this->currencies = $currencies;
    }
}

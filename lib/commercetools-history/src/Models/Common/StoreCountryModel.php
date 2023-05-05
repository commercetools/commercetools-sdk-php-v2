<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreCountryModel extends JsonObjectModel implements StoreCountry
{


    /**
     *
     * @var ?string
     */
    protected $code;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $code = null
    ) {
        $this->code = $code;

    }

    /**
     * <p>Two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code =  (string) $data;
        }

        return $this->code;
    }


    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }



}

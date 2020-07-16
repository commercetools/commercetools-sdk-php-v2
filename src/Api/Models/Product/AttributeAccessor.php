<?php


namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringCollection;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValue;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueModel;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValue;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

class AttributeAccessor
{
    /**
     * @var Attribute
     */
    private $attribute;

    private function __construct(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @psalm-return list<mixed>|array<string, mixed>|\stdClass
     * @return mixed
     */
    public function getValue()
    {
        /**
         * @psalm-var list<mixed>|array<string, mixed>|\stdClass $value
         */
        $value = $this->attribute->getValue();
        return $value;
    }

    /**
     * @psalm-return callable(Attribute): self
     */
    public static function of()
    {
        return function (Attribute $attribute): AttributeAccessor {
            return new static($attribute);
        };
    }

    public function getValueAsEnum(): AttributePlainEnumValue
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->attribute->getValue();
        return AttributePlainEnumValueModel::of($value);
    }

    public function getValueAsLocalizedEnum(): AttributeLocalizedEnumValue
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->attribute->getValue();
        return AttributeLocalizedEnumValueModel::of($value);
    }

    public function getValueAsString(): string
    {
        return (string)$this->attribute->getValue();
    }

    public function getValueAsInt(): int
    {
        return (int)$this->attribute->getValue();
    }

    public function getValueAsFloat(): float
    {
        return (float)$this->attribute->getValue();
    }

    public function getValueAsBool(): bool
    {
        return (bool)$this->attribute->getValue();
    }

    public function getValueAsDateTime(): ?DateTimeImmutable
    {
        $value = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, (string)$this->attribute->getValue());
        return $value ? $value : null;
    }

    public function getValueAsTime(): ?DateTimeImmutable
    {
        $value = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, (string)$this->attribute->getValue());
        return $value ? $value : null;
    }

    public function getValueAsDate(): ?DateTimeImmutable
    {
        $value = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, (string)$this->attribute->getValue());
        return $value ? $value : null;
    }

    public function getValueAsMoney(): Money
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->attribute->getValue();
        return MoneyModel::of($value);
    }

    public function getValueAsReference(): Reference
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->attribute->getValue();
        $refClass = ReferenceModel::resolveDiscriminatorClass($value);
        return $refClass::of($value);
    }

    public function getValueAsNested(): AttributeCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return AttributeCollection::fromArray($value);
    }

    public function getValueAsLocalizedString(): LocalizedString
    {
        /**
         * @psalm-var array<string, string>|\stdClass $value
         */
        $value = $this->attribute->getValue();
        return LocalizedStringModel::of($value);
    }

    public function getValueAsEnumSet(): AttributePlainEnumValueCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return AttributePlainEnumValueCollection::fromArray($value);
    }

    public function getValueAsLocalizedEnumSet(): AttributeLocalizedEnumValueCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return AttributeLocalizedEnumValueCollection::fromArray($value);
    }

    public function getValueAsStringSet(): array
    {
        /**
         * @psalm-var list<string> $value
         */
        $value = $this->attribute->getValue();
        return $value;
    }

    public function getValueAsIntSet(): array
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return array_map(function ($value) {
            return (int)$value;
        }, $value);
    }

    public function getValueAsFloatSet(): array
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return array_map(function ($value) {
            return (float)$value;
        }, $value);
    }

    public function getValueAsBoolSet(): array
    {
        /**
         * @psalm-var list<bool> $value
         */
        $value = $this->attribute->getValue();
        return $value;
    }

    public function getValueAsDateTimeSet(): DateTimeImmutableCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return DateTimeImmutableCollection::fromArray($value);
    }

    public function getValueAsTimeSet(): DateTimeImmutableCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return DateTimeImmutableCollection::fromArray($value);
    }

    public function getValueAsDateSet(): DateTimeImmutableCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return DateTimeImmutableCollection::fromArray($value);
    }

    public function getValueAsMoneySet(): MoneyCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return MoneyCollection::fromArray($value);
    }

    public function getValueAsLocalizedStringSet(): LocalizedStringCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->attribute->getValue();
        return LocalizedStringCollection::fromArray($value);
    }
}

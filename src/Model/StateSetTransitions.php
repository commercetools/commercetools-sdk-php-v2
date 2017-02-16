<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateSetTransitions extends StateUpdateAction {
    protected $transitions;
    const DISCRIMINATOR_VALUE = 'setTransitions';

    /**
     * @return StateReferenceCollection
     */
    public function getTransitions(): StateReferenceCollection
    {
        if (is_null($this->transitions)) {
            $value = $this->raw('transitions');
            if (!is_null($value)) {
                $this->transitions = Mapper::map($value, StateReferenceCollection::class);
            } else {
                return Mapper::map([], StateReferenceCollection::class);
            }
        }
        return $this->transitions;
    }
                
}

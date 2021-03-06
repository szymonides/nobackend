<?php namespace nobackend\Validator;

class StringLengthMaxValidator extends AbstractValidator
{
    protected $_errorMessage = 'Given value is too long.';

    private $_max;

    /**
     * @param int $max
     */
    public function __construct(int $max)
    {
        $this->_max = $max;
    }

    /**
     * This method checks if value is correct.
     *
     * @return bool
     */
    public function validate() : bool
    {
        if (null == $this->getValue()) {
            return true;
        }

        $validate = strlen($this->getValue()) <= $this->_max;

        $this->_setMessage($validate);
        return $validate;
    }
}
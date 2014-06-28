<?php

/*
 * This file is part of the L'Échoppe package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Echoppe\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Quantitative Value
 * 
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @link http://schema.org/QuantitativeValue
 * 
 * @ORM\Entity
 */
class QuantitativeValue extends StructuredValue
{
    /**
     * Max Value
     * 
     * @var float $maxValue The upper of the product characteristic.
     * 
     * @Assert\Type(type="float")
     * @ORM\Column(type="float")
     */
    private $maxValue;
    /**
     * Min Value
     * 
     * @var float $minValue The lower value of the product characteristic.
     * 
     * @Assert\Type(type="float")
     * @ORM\Column(type="float")
     */
    private $minValue;
    /**
     * Unit Code
     * 
     * @var string $unitCode The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     * 
     * @Assert\Type(type="string")
     * @ORM\Column
     */
    private $unitCode;
    /**
     * Value
     * 
     * @var float $value The value of the product characteristic.
     * 
     * @Assert\Type(type="float")
     * @ORM\Column(type="float")
     */
    private $value;
}
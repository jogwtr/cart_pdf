<?php
declare(strict_types=1);
namespace Extcode\CartPdf\Domain\Model\Dto;

/*
 * This file is part of the package extcode/cart-pdf.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

class PdfDemand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * @var int
     */
    protected $debug = 0;

    /**
     * @var int
     */
    protected $fontSize = 8;

    /**
     * @var bool
     */
    protected $foldMarksEnabled = true;

    /**
     * @var bool
     */
    protected $addressFieldMarksEnabled = true;

    /**
     * @return int
     */
    public function getDebug(): int
    {
        // @extensionScannerIgnoreLine
        return $this->debug;
    }

    /**
     * @param int $debug
     */
    public function setDebug(int $debug)
    {
        if ($debug) {
            // @extensionScannerIgnoreLine
            $this->debug = $debug;
        }
    }

    /**
     * @return int
     */
    public function getFontSize(): int
    {
        return $this->fontSize;
    }

    /**
     * @param int $fontSize
     */
    public function setFontSize(int $fontSize)
    {
        if ($fontSize) {
            $this->fontSize = $fontSize;
        }
    }

    /**
     * @return bool
     */
    public function getFoldMarksEnabled(): bool
    {
        return $this->foldMarksEnabled;
    }

    /**
     * @param bool $foldMarksEnabled
     */
    public function setFoldMarksEnabled(bool $foldMarksEnabled)
    {
        $this->foldMarksEnabled = $foldMarksEnabled;
    }

    /**
     * @return bool
     */
    public function getAddressFieldMarksEnabled(): bool
    {
        return $this->addressFieldMarksEnabled;
    }

    /**
     * @param bool $addressFieldMarksEnabled
     */
    public function setAddressFieldMarksEnabled(bool $addressFieldMarksEnabled)
    {
        $this->addressFieldMarksEnabled = $addressFieldMarksEnabled;
    }
}

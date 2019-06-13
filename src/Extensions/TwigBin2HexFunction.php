<?php
namespace CeresCoconut\Extensions;
use Plenty\Plugin\Templates\Extensions\Twig_Extension;
use Plenty\Plugin\Templates\Factories\TwigFactory;
class TwigBin2HexFunction extends Twig_Extension
{
    /**
     * @var TwigFactory
     */
    private $twig;

    /**
     * TwigBin2HexFunction constructor.
     * @param TwigFactory $twig
     */
    public function __construct(TwigFactory $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Return the name of the extension. The name must be unique.
     *
     * @return string The name of the extension
     */
    public function getName(): string
    {
        return "CeresCoconut_Extension_TwigBin2HexFunction";
    }

    /**
     * Return a list of functions to add.
     *
     * @return array the list of functions to add.
     */
    public function getFunctions(): array
    {
        return [
            $this->twig->createSimpleFunction('bin_to_hex', [$this, 'binToHex'])
        ];
    }

    public function binToHex($value)
    {
        return bin2hex($value);
    }

    /**
     * Return a map of global helper objects to add.
     *
     * @return array the map of helper objects to add.
     */
    public function getGlobals(): array
    {
        return [];
    }
}

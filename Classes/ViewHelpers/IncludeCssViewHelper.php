<?php
namespace TYPO3\SiteBase\ViewHelpers;

/*                                                                        *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * copy of https://github.com/NamelessCoder/fed/blob/master/Classes/ViewHelpers/PageRenderer/AddCssFileViewHelper.php
 *
 */
class IncludeCssViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @var \TYPO3\CMS\Core\Page\PageRenderer
	 * @inject
	 */
	protected $pageRenderer;

	/**
	 * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManager
	 * @inject
	 */
	protected $configurationManager;

	/**
	 * Initialize
	 */
	public function initializeArguments() {
		$this->registerArgument('rel', 'string', 'Rel argument - see PageRenderer documentation', FALSE, 'stylesheet');
		$this->registerArgument('media', 'strong', 'Media argument - see PageRenderer documentation', FALSE, 'all');
		$this->registerArgument('title', 'string', 'Title argument - see PageRenderer documentation', FALSE, '');
		$this->registerArgument('compress', 'boolean', 'Compress argument - see PageRenderer documentation', FALSE, TRUE);
		$this->registerArgument('forceOnTop', 'boolean', 'ForceOnTop argument - see PageRenderer documentation', FALSE, FALSE);
		$this->registerArgument('allWrap', 'string', 'AllWrap argument - see PageRenderer documentation', FALSE, '');
		$this->registerArgument('excludeFromConcatenation', 'string', 'ExcludeFromConcatenation argument - see PageRenderer documentation', FALSE, FALSE);
	}

	/**
	 * Render
	 *
	 * @param string $file
	 */
	public function render($file = NULL) {
		if ($this->isCached()) {
			$this->pageRenderer->addCssFile(
				$file,
				$this->arguments['rel'],
				$this->arguments['media'],
				$this->arguments['title'],
				$this->arguments['compress'],
				$this->arguments['forceOnTop'],
				$this->arguments['allWrap'],
				$this->arguments['excludeFromConcatenation']
			);
		} else {
			$GLOBALS['TSFE']->additionalHeaderData[md5($file)] = '<link rel="' . $this->arguments['rel'] . '" type="text/css" media="' . $this->arguments['media'] . '" href="' . $file . '" />';
		}
	}

	/**
	 * Returns TRUE if what we are outputting may be cached
	 *
	 * @return boolean
	 */
	protected function isCached() {
		$userObjType = $this->configurationManager->getContentObject()->getUserObjectType();
		return ($userObjType !== ContentObjectRenderer::OBJECTTYPE_USER_INT);
	}

}

?>
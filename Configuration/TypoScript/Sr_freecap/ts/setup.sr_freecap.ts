####################################################################################################
## sr_freecap
# add the following TS in setup:
# <INCLUDE_TYPOSCRIPT: source="FILE: EXT:wt_base/Configuration/TypoScript/Sr_freecap/setup.sr_freecap.ts">
plugin.tx_srfreecap_pi1 {
	imageHeight = 90
	imageFormat = png
	
	backgroundType = White with grid
	backgroundBlur = 1
	backgroundMorph = 1
	
	maxWordLength = 4
	useWordsList = 0
	generateNumbers = 1
	
	textColor = 0
	mergeWithBackground = 0
	morphFactor = 0.1
	defaultWordsList = {$plugin.tx_srfreecap.defaultWordsList}
	fontFiles = {$plugin.tx_srfreecap.fontFiles}
	
	maxAttempts = {$plugin.tx_srfreecap.maxAttempts}
	
	accessibleOutput = 0
}

plugin.tx_srfreecap_pi2 {
	_CSS_DEFAULT_STYLE >
}
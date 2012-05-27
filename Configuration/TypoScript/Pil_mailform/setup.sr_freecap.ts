####################################################################################################
## pil_mailform with sr_freecap
# add the following TS in setup:
# <INCLUDE_TYPOSCRIPT: source="FILE: EXT:wt_base/Configuration/TypoScript/Pil_mailform/setup.sr_freecap.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:wt_base/Configuration/TypoScript/Pil_mailform/setup.pil_mailform.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:wt_base/Configuration/TypoScript/Sr_freecap/setup.sr_freecap.ts">
plugin.tx_pilmailform_pi1 {
	template = EXT:wt_base/Resources/Private/Templates/Pil_mailform/sr_freecap.html
	requiredValues (
		firstname; notEmpty;
		lastname; notEmpty;
		email; regex:/^[A-Za-z0-9\._-]+[@][A-Za-z0-9\._-]+[\.].[A-Za-z0-9]+$/;
		message; notEmpty;
		captcha; useCaptcha;
	)
}
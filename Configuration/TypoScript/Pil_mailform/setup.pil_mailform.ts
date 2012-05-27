####################################################################################################
## pil_mailform
# add the following TS in setup:
# <INCLUDE_TYPOSCRIPT: source="FILE: EXT:wt_base/Configuration/TypoScript/Pil_mailform/setup.pil_mailform.ts">
plugin.tx_pilmailform_pi1 {
	### General ###
	testmode = 0
	overrideSubject = 1
	typeofRecipient = 0
	copyToUser = 0
	template = EXT:wt_base/Resources/Private/Templates/Pil_mailform/index.html
	useLL = 1
	LLFile = EXT:wt_base/Resources/Private/Templates/Pil_mailform/locallang.xml
	
	### Field settings ###
	errorSubstitution = error
	requiredValues (
		firstname; notEmpty;
		lastname; notEmpty;
		email; regex:/^[A-Za-z0-9\._-]+[@][A-Za-z0-9\._-]+[\.].[A-Za-z0-9]+$/;
		message; notEmpty;
	)
	dateMarker = d.m.Y
	timeMarker = H:i
	charset = utf-8
	
	### Mail header ###
	overrideFromHeader = 1
	overrideReplyToHeader = 1
}
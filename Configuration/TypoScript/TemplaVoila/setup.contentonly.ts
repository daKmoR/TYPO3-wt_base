####################################################################################################
## contentonly
# add the following TS in setup:
# [globalString = _SERVER|HTTP_X_REQUESTED_WITH = XMLHttpRequest] || [globalVar = GP:type = 124]
# 	<INCLUDE_TYPOSCRIPT: source="FILE: EXT:wt_base/Configuration/TypoScript/TemplaVoila/setup.contentonly.ts">
# 	lib.content >
# 	lib.content < content.current
# 	page < contentonly
# [global]
# [globalVar = GP:type = 124]
# 	page.typeNum = 124
# [global]

contentonly = PAGE
contentonly {
	config.disableAllHeaderCode = 1
	10 = USER
	10 {
		childTemplate = contentonly
		userFunc = tx_templavoila_pi1->main_page
	}
}
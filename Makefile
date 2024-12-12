
release:
	rm -f ~/plugin.zip
	git archive --format zip --prefix enzuzo-cookie-consent/ --output ~/plugin.zip main

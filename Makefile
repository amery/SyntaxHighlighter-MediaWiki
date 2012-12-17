.PHONY: all

NAME=SyntaxHighlighter
OUT=$(NAME).php
GEN=$(NAME).sh

all: $(OUT)

$(OUT): $(NAME).sh
	$(SHELL) $< > $@~
	mv $@~ $@

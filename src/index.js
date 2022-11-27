// BootstrapのJavaScript側の機能を読み込む
import "bootstrap";

// スタイルシート（Sass）を読み込む
// .scssファイルを新規追加した場合はここに記載しないとコンパイルされない
import "./style.scss";
import "./header.scss";
import "./footer.scss";
import "./sidebar.scss";

// highlight.jsの機能を読み込む
import hljs from "highlight.js/lib/core";
import javascript from "highlight.js/lib/languages/javascript";
import python from "highlight.js/lib/languages/python";
import bash from "highlight.js/lib/languages/bash";
import typescript from "highlight.js/lib/languages/typescript";
import sql from "highlight.js/lib/languages/sql";
import java from "highlight.js/lib/languages/java";
import "highlight.js/styles/github.css";

hljs.registerLanguage("javascript", javascript);
hljs.registerLanguage("python", python);
hljs.registerLanguage("bash", bash);
hljs.registerLanguage("typescript", typescript);
hljs.registerLanguage("sql", sql);
hljs.registerLanguage("java", java);

document.addEventListener("DOMContentLoaded", (event) => {
  document.querySelectorAll("pre code").forEach((el) => {
    hljs.highlightElement(el);
  });
});

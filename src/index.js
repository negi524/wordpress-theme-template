// BootstrapのJavaScript側の機能を読み込む
import "bootstrap";

// スタイルシート（Sass）を読み込む
// .scssファイルを新規追加した場合はここに記載しないとコンパイルされない
import "./style.scss";
import "./header.scss";
import "./footer.scss";
import "./sidebar.scss";

// highlight.jsの機能を読み込む
import hljs from "highlight.js";
import javascript from "highlight.js/lib/languages/javascript";
import python from "highlight.js/lib/languages/python";
import "highlight.js/styles/github.css";

hljs.registerLanguage("javascript", javascript);

document.addEventListener("DOMContentLoaded", (event) => {
  document.querySelectorAll("pre code").forEach((el) => {
    hljs.highlightElement(el);
  });
});

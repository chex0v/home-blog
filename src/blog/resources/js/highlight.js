import hljs from 'highlight.js';

setTimeout(function () {
  document
      .querySelectorAll('pre')
      .forEach((block) => hljs.highlightElement(block));
}, 10);
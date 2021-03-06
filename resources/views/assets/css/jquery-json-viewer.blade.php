<style>
/* Syntax highlighting for JSON objects */
ul.json-dict, ol.json-array {
  list-style-type: none;
  margin: 0 0 0 1px;
  border-left: 1px dotted #ccc;
  padding-left: 2em;
}
.json-string {
  color: #e6bd2e;
}
.json-literal {
  color: #5bc0de;
  font-weight: bold;
}

/* Toggle button */
a.json-toggle {
  position: relative;
  color: #fffc7a !important;
  text-decoration: none;
}
a.json-toggle:focus {
  outline: none;
}
a.json-toggle:before {
  color: #aaa;
  content: "\25BC"; /* down arrow */
  position: absolute;
  display: inline-block;
  width: 1em;
  left: -1em;
}
a.json-toggle.collapsed:before {
  transform: rotate(-90deg); /* Use rotated down arrow, prevents right arrow appearing smaller than down arrow in some browsers */
  -ms-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
      margin-top: -3px;
}

/* Collapsable placeholder links */
a.json-placeholder {
  color: #fffc7a !important;
  padding: 0 1em;
  text-decoration: none;
}
a.json-placeholder:hover {
  text-decoration: underline;
}


#apidocs-api a.json-string {
    color: #ace46b;
}
</style>

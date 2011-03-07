<?


$png_fpath = make_dependency_graph($manifests, array(), MODULE_DIAGRAMER_TMP_FPATH);

$png_vpath = MODULE_DIAGRAMER_TMP_VPATH . "/" . basename($png_fpath);



plugin.tx_pinnwand_pinnwand {
    view {
        # cat=plugin.tx_pinnwand_pinnwand/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:pinnwand/Resources/Private/Templates/
        # cat=plugin.tx_pinnwand_pinnwand/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:pinnwand/Resources/Private/Partials/
        # cat=plugin.tx_pinnwand_pinnwand/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:pinnwand/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pinnwand_pinnwand//a; type=string; label=Default storage PID
        storagePid =
    }
}

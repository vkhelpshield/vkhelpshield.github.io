#include <amxmodx>
#include <amxmisc>

public vip_motd(id,level,cid) {

	if (!cmd_access(id,level,cid,1))
	return PLUGIN_CONTINUE
	
	show_motd(id,"action.txt","Как получить VIP...")
	return PLUGIN_CONTINUE   
}

public plugin_init() {

    register_plugin("say /action","1.0","click")
    register_clcmd("say /action","vip_motd",0,"- Shows the MOTD.")
}

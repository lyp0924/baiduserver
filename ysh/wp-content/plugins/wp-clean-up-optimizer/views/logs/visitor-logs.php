<?php
/**
 * This Template is used for displaying visitor logs.
 *
 * @author Tech Banker
 * @package wp-cleanup-optimizer/views/logs
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}//exit if accessed directly
if ( ! is_user_logged_in() ) {
	return;
} else {
	$access_granted = false;
	if ( isset( $user_role_permission ) && count( $user_role_permission ) > 0 ) {
		foreach ( $user_role_permission as $permission ) {
			if ( current_user_can( $permission ) ) {
				$access_granted = true;
				break;
			}
		}
	}
	if ( ! $access_granted ) {
		return;
	} elseif ( LOGS_CLEAN_UP_OPTIMIZER === '1' ) {
		$visitor_log_delete = wp_create_nonce( 'visitor_log_delete' );
		$timestamp          = CLEAN_UP_OPTIMIZER_LOCAL_TIME;
		$start_date         = $timestamp - 86340;
		?>
		<div class="page-bar">
			<ul class="page-breadcrumb">
			<li>
				<i class="icon-custom-home"></i>
				<a href="admin.php?page=cpo_dashboard">
					<?php echo esc_attr( $cpo_clean_up_optimizer ); ?>
				</a>
				<span>></span>
			</li>
			<li>
				<a href="admin.php?page=cpo_login_logs">
					<?php echo esc_attr( $cpo_logs_label ); ?>
				</a>
				<span>></span>
			</li>
			<li>
				<span>
					<?php echo esc_attr( $cpo_logs_visitor_logs ); ?>
				</span>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="portlet box vivid-green">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-custom-user"></i>
						<?php echo esc_attr( $cpo_recent_logins_on_world_map_label ); ?>
					</div>
					<p class="premium-editions-clean-up-optimizer">
						<?php echo esc_attr( $cpo_upgrade_know_about ); ?> <a href="<?php echo esc_attr( TECH_BANKER_BETA_URL ); ?>" target="_blank" class="premium-editions-documentation"> <?php echo esc_attr( $cpo_full_features ); ?></a> <?php echo esc_attr( $cpo_chek_our ); ?> <a href="<?php echo esc_attr( TECH_BANKER_BETA_URL ); ?>/backend-demos" target="_blank" class="premium-editions-documentation"><?php echo esc_attr( $cpo_online_demos ); ?></a>
						</p>
				</div>
				<div class="portlet-body form">
					<form id="ux_frm_live_traffic">
						<div class="form-body">
						<div id="map_canvas" class="custom-map"></div>
					</div>
					</form>
				</div>
			</div>
			<div class="portlet box vivid-green">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-custom-user"></i>
						<?php echo esc_attr( $cpo_logs_visitor_logs ); ?>
					</div>
				</div>
				<div class="portlet-body form">
					<form id="ux_frm_visitor_logs">
						<div class="form-body">
						<?php
						if ( 'enable' === $visitor_logs_data['visitor_logs_monitoring'] ) {
							?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											<?php echo esc_attr( $cpo_start_date ); ?> :
											<span class="required" aria-required="true">* <?php echo ' ( ' . esc_attr( $cpo_upgrade ) . ' )'; ?></span>
										</label>
										<input type="text" class="form-control" name="ux_txt_start_date" value="<?php echo esc_attr( date( 'm/d/Y', $start_date ) ); ?>" id="ux_txt_start_date"  placeholder="<?php echo esc_attr( $cpo_start_date_placeholder ); ?>" onkeypress="prevent_data_clean_up_optimizer(event)">
										<i class="controls-description"><?php echo esc_attr( $cpo_recent_logins_start_date_tooltip ); ?></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label class="control-label">
										<?php echo esc_attr( $cpo_end_date ); ?> :
										<span class="required" aria-required="true">* <?php echo ' ( ' . esc_attr( $cpo_upgrade ) . ' )'; ?></span>
									</label>
									<input type="text" class="form-control" name="ux_txt_end_date" value="<?php echo esc_attr( date( 'm/d/Y', $timestamp ) ); ?>" id="ux_txt_end_date" placeholder="<?php echo esc_attr( $cpo_end_date_placeholder ); ?>" onkeypress="prevent_data_clean_up_optimizer(event)">
									<i class="controls-description"><?php echo esc_attr( $cpo_recent_logins_end_date_tooltip ); ?></i>
								</div>
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" class="btn vivid-green" name="ux_btn_live_traffic" id="ux_btn_live_traffic" value="<?php echo esc_attr( $cpo_submit ); ?>">
								</div>
							</div>
							<div class="line-separator"></div>
							<div class="form-actions">
								<div class="table-top-margin">
									<select name="ux_ddl_visitor_log" id="ux_ddl_visitor_log" class="custom-bulk-width" onchange="bulk_block_time_for_clean_up_optimizer('#ux_ddl_visitor_log', '#ux_ddl_bulk_ip_blocked_for')">
									<option value=""><?php echo esc_attr( $cpo_bulk_action_dropdown ); ?></option>
									<option value="delete" style="color:red;"><?php echo esc_attr( $cpo_delete ) . ' ( ' . esc_attr( $cpo_upgrade ) . ' )'; ?></option>
									<option value="block" style="color:red;"><?php echo esc_attr( $cpo_block ) . ' ( ' . esc_attr( $cpo_upgrade ) . ' )'; ?></option>
								</select>
								<select name="ux_ddl_bulk_ip_blocked_for" id="ux_ddl_bulk_ip_blocked_for" style="display:none" class="custom-bulk-width">
									<option value="1Hour"><?php echo esc_attr( $cpo_one_hour ); ?></option>
									<option value="12Hour"><?php echo esc_attr( $cpo_twelve_hours ); ?></option>
									<option value="24hours"><?php echo esc_attr( $cpo_twenty_four_hours ); ?></option>
									<option value="48hours"><?php echo esc_attr( $cpo_forty_eight_hours ); ?></option>
									<option value="week"><?php echo esc_attr( $cpo_one_week ); ?></option>
									<option value="month"><?php echo esc_attr( $cpo_one_month ); ?></option>
									<option value="permanently"><?php echo esc_attr( $cpo_one_permanently ); ?></option>
								</select>
								<input type="button" class="btn vivid-green" name="ux_btn_apply" id="ux_btn_apply" onclick="premium_edition_notification_clean_up_optimizer();" value="<?php echo esc_attr( $cpo_apply ); ?>">
								</div>
								<table class="table table-striped table-bordered table-hover table-margin-top" id="ux_tbl_visitor_logs">
									<thead>
									<tr>
										<th  style="text-align:center;width: 5% !important;" class="chk-action">
											<input type="checkbox" name="ux_chk_all_visitor_logs" id="ux_chk_all_visitor_logs" >
										</th>
										<th style="width: 15%;">
											<label class="control-label" >
												<?php echo esc_attr( $cpo_table_heading_user_name ); ?>
											</label>
										</th>
										<th style="width: 15%;">
											<label class="control-label">
												<?php echo esc_attr( $cpo_ip_address ); ?>
											</label>
										</th>
										<th style="width: 15%;">
											<label class="control-label">
												<?php echo esc_attr( $cpo_location ); ?>
											</label>
										</th>
										<th style="width: 25%;">
											<label class="control-label">
												<?php echo esc_attr( $cpo_table_heading_details ); ?>
											</label>
										</th>
										<th style="width: 15%;">
											<label class="control-label">
												<?php echo esc_attr( $cpo_table_heading_date_time ); ?>
											</label>
										</th>
										<th style="text-align:center;width: 10%;" class="chk-action">
											<label class="control-label">
												<?php echo esc_attr( $cpo_action ); ?>
											</label>
										</th>
									</tr>
								</thead>
								<tbody id="dynamic_table_filter">
									<?php
									if ( isset( $data_logs ) && count( $data_logs ) > 0 ) {
										foreach ( $data_logs as $row ) {
											?>
											<tr>
												<td  style="text-align: center;width: 5% !important;">
												<input type="checkbox" name="ux_chk_visitor_logs_<?php echo esc_attr( $row['meta_id'] ); ?>" id="ux_chk_visitor_logs_<?php echo esc_attr( $row['meta_id'] ); ?>" value="<?php echo esc_attr( $row['meta_id'] ); ?>" onclick="check_all_clean_up_optimizer('#ux_chk_all_visitor_logs');">
											</td>
											<td style="width: 15%;">
												<label>
													<?php echo '' !== $row['username'] ? esc_attr( $row['username'] ) : esc_attr( $cpo_not_available ); ?>
												</label>
											</td>
											<td style="width: 15%;">
												<label>
													<?php echo esc_attr( long2ip_clean_up_optimizer( $row['user_ip_address'] ) ); ?>
												</label>
											</td>
											<td style="width: 15%;">
												<label>
													<?php echo '' !== $row['location'] ? esc_attr( $row['location'] ) : esc_attr( $cpo_not_available ); ?>
												</label>
											</td>
											<td style="width: 25%;">
												<label>
													<?php echo esc_attr( $cpo_live_traffic_resources ); ?>: <?php echo esc_attr( $row['resources'] ); ?><br/>
													<?php echo esc_attr( $cpo_http_user_agent ); ?>: <?php echo esc_attr( $row['http_user_agent'] ); ?>
												</label>
											</td>
											<td style="width: 15%;">
												<label>
													<?php echo esc_attr( date( 'd M Y h:i A', $row['date_time'] ) ); ?>
												</label>
											</td>
											<td class="custom-alternative" style="width: 10%;">
												<a href="javascript:void(0);" class="btn clean-up-optimizer-buttons" onclick="visitor_log_selected_delete_clean_up_optimizer(<?php echo intval( $row['meta_id'] ); ?>)"><?php echo esc_attr( $cpo_delete ); ?></a>
												<a class="btn clean-up-optimizer-buttons" onclick="premium_edition_notification_clean_up_optimizer();"><?php echo esc_attr( $cpo_block_ip_address ); ?></a>
											</td>
										</tr>
											<?php
										}
									}
									?>
								</tbody>
								</table>
							</div>
							<?php
						} else {
							?>
							<strong>
								<?php echo esc_attr( $cpo_visitor_logs_monitoring_message ); ?>
							</strong>
							<?php
						}
						?>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="page-bar">
			<ul class="page-breadcrumb">
			<li>
				<i class="icon-custom-home"></i>
				<a href="admin.php?page=cpo_dashboard">
					<?php echo esc_attr( $cpo_clean_up_optimizer ); ?>
				</a>
				<span>></span>
			</li>
			<li>
				<a href="admin.php?page=cpo_login_logs">
					<?php echo esc_attr( $cpo_logs_label ); ?>
				</a>
				<span>></span>
			</li>
			<li>
				<span>
					<?php echo esc_attr( $cpo_logs_visitor_logs ); ?>
				</span>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="portlet box vivid-green">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-custom-user"></i>
						<?php echo esc_attr( $cpo_logs_visitor_logs ); ?>
					</div>
				</div>
				<div class="portlet-body form">
					<form id="ux_frm_live_traffic">
						<div class="form-body">
						<strong><?php echo esc_attr( $cpo_roles_capabilities_message ); ?></strong>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		<?php
	}
}

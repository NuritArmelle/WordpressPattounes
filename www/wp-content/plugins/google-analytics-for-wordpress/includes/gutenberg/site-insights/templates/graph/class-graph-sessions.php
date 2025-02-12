<?php
/**
 * Class that handles the output for the sessions graph.
 *
 * Class MonsterInsights_SiteInsights_Template_Graph_Session
 */
class MonsterInsights_SiteInsights_Template_Graph_Sessions extends MonsterInsights_SiteInsights_Metric_Template {

	protected $metric = 'sessions';

	protected $type = 'graph';

	public function output(){
		$json_data = $this->get_json_data();

		if (empty($json_data)) {
			return false;
		}

		return "<div class='monsterinsights-graph-item monsterinsights-graph-{$this->metric}'>
			<script type='application/json'>{$json_data}</script>
		</div>";
	}

	protected function get_options() {
		if (empty($this->data['overviewgraph'])) {
			return false;
		}

		$primaryColor = $this->attributes['primaryColor'];
		$secondaryColor = $this->attributes['secondaryColor'];
		$textColor = $this->attributes['textColor'];

		$data = $this->data['overviewgraph'];

		$title = __( 'Sessions', 'google-analytics-for-wordpress' );

		$options = array(
			'series' => array(
				array(
					'name' => $title,
					'data' => $data['sessions']['datapoints']
				)
			),
			'chart' => array(
				'type' => 'area',
				'zoom' => array( 'enabled' => false ),
				'toolbar' => array( 'show' => false )
			),
			'dataLabels' => array( 'enabled' => false ),
			'stroke' => array(
				'curve' => 'straight',
				'width' => 4,
				'colors' => array( $primaryColor )
			),
			'fill' => array( 'type' => 'solid' ),
			'colors' => array( $secondaryColor ),
			'markers' => array(
				'style' => 'hollow',
				'size' => 5,
				'colors' => array( '#ffffff' ),
				'strokeColors' => $primaryColor
			),
			'title' => array(
				'text' => $title,
				'align' => 'left',
				'style' => array(
					'color' => $textColor,
					'fontSize' => '17px',
					'fontWeight' => 'bold',
				)
			),
			'grid' => array(
				'show' => true,
				'borderColor' => 'rgba(58, 147, 221, 0.15)',
				'xaxis' => array(
					'lines' => array( 'show' => true )
				),
				'yaxis' => array(
					'lines' => array( 'show' => true )
				),
				'padding' => array(
					'top' => 10,
					'right' => 10,
					'bottom' => 10,
					'left' => 10,
				)
			),
			'xaxis' => array( 'categories' => $data['labels'] ),
			'yaxis' => array( 'type' => 'numeric' ),
		);

		return $options;
	}


}
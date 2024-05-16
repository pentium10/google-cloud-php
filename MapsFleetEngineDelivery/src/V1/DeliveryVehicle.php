<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_vehicles.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `DeliveryVehicle` message. A delivery vehicle transports shipments from a
 * depot to a delivery location, and from a pickup location to the depot. In
 * some cases, delivery vehicles also transport shipments directly from the
 * pickup location to the delivery location.
 * Note: gRPC and REST APIs use different field naming conventions. For example,
 * the `DeliveryVehicle.current_route_segment` field in the gRPC API and the
 * `DeliveryVehicle.currentRouteSegment` field in the REST API refer to the same
 * field.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.DeliveryVehicle</code>
 */
class DeliveryVehicle extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of this Delivery Vehicle.
     * The format is `providers/{provider}/deliveryVehicles/{vehicle}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The last reported location of the Delivery Vehicle.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleLocation last_location = 2;</code>
     */
    protected $last_location = null;
    /**
     * The Delivery Vehicle's navigation status.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleNavigationStatus navigation_status = 3;</code>
     */
    protected $navigation_status = 0;
    /**
     * The encoded polyline specifying the route that the navigation recommends
     * taking to the next waypoint. Your driver app updates this when a
     * stop is reached or passed, and when the navigation reroutes. These
     * `LatLng`s are returned in
     * `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     * (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     * (REST) for all active Tasks assigned to the Vehicle.
     * There are a few cases where this field might not be used to populate
     * `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     * (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     * (REST):
     * * The endpoint of the `current_route_segment` does not match
     * `DeliveryVehicle.remaining_vehicle_journey_segments[0].stop` (gRPC) or
     * `DeliveryVehicle.remainingVehicleJourneySegments[0].stop` (REST).
     * * The driver app has not updated its location recently, so the last
     * updated value for this field might be stale.
     * * The driver app has recently updated its location, but the
     * `current_route_segment` is stale, and points to a previous vehicle stop.
     * In these cases, Fleet Engine populates this field with a route from the
     * most recently passed VehicleStop to the upcoming VehicleStop to ensure that
     * the consumer of this field has the best available information on the
     * current path of the Delivery Vehicle.
     *
     * Generated from protobuf field <code>bytes current_route_segment = 4;</code>
     */
    protected $current_route_segment = '';
    /**
     * The location where the `current_route_segment` ends. This is not currently
     * populated by the driver app, but you can supply it on
     * `UpdateDeliveryVehicle` calls. It is either the `LatLng` from the upcoming
     * vehicle stop, or the last `LatLng` of the `current_route_segment`. Fleet
     * Engine will then do its best to interpolate to an actual `VehicleStop`.
     * This field is ignored in `UpdateDeliveryVehicle` calls if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.type.LatLng current_route_segment_end_point = 5;</code>
     */
    protected $current_route_segment_end_point = null;
    /**
     * The remaining driving distance for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app. For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_distance_meters` (gRPC)
     * or `Task.remainingVehicleJourneySegments[0].drivingDistanceMeters` (REST)
     * for all active `Task`s assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_distance_meters = 6;</code>
     */
    protected $remaining_distance_meters = null;
    /**
     * The remaining driving time for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app.  For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_duration` (gRPC) or
     * `Task.remainingVehicleJourneySegments[0].drivingDuration` (REST) for all
     * active tasks assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration remaining_duration = 7;</code>
     */
    protected $remaining_duration = null;
    /**
     * The journey segments assigned to this Delivery Vehicle, starting from the
     * Vehicle's most recently reported location. This field won't be populated
     * in the response of `ListDeliveryVehicles`.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.VehicleJourneySegment remaining_vehicle_journey_segments = 8;</code>
     */
    private $remaining_vehicle_journey_segments;
    /**
     * A list of custom Delivery Vehicle attributes. A Delivery Vehicle can have
     * at most 100 attributes, and each attribute must have a unique key.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.DeliveryVehicleAttribute attributes = 9;</code>
     */
    private $attributes;
    /**
     * The type of this delivery vehicle. If unset, this will default to `AUTO`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicle.DeliveryVehicleType type = 10;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of this Delivery Vehicle.
     *           The format is `providers/{provider}/deliveryVehicles/{vehicle}`.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation $last_location
     *           The last reported location of the Delivery Vehicle.
     *     @type int $navigation_status
     *           The Delivery Vehicle's navigation status.
     *     @type string $current_route_segment
     *           The encoded polyline specifying the route that the navigation recommends
     *           taking to the next waypoint. Your driver app updates this when a
     *           stop is reached or passed, and when the navigation reroutes. These
     *           `LatLng`s are returned in
     *           `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     *           (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     *           (REST) for all active Tasks assigned to the Vehicle.
     *           There are a few cases where this field might not be used to populate
     *           `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     *           (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     *           (REST):
     *           * The endpoint of the `current_route_segment` does not match
     *           `DeliveryVehicle.remaining_vehicle_journey_segments[0].stop` (gRPC) or
     *           `DeliveryVehicle.remainingVehicleJourneySegments[0].stop` (REST).
     *           * The driver app has not updated its location recently, so the last
     *           updated value for this field might be stale.
     *           * The driver app has recently updated its location, but the
     *           `current_route_segment` is stale, and points to a previous vehicle stop.
     *           In these cases, Fleet Engine populates this field with a route from the
     *           most recently passed VehicleStop to the upcoming VehicleStop to ensure that
     *           the consumer of this field has the best available information on the
     *           current path of the Delivery Vehicle.
     *     @type \Google\Type\LatLng $current_route_segment_end_point
     *           The location where the `current_route_segment` ends. This is not currently
     *           populated by the driver app, but you can supply it on
     *           `UpdateDeliveryVehicle` calls. It is either the `LatLng` from the upcoming
     *           vehicle stop, or the last `LatLng` of the `current_route_segment`. Fleet
     *           Engine will then do its best to interpolate to an actual `VehicleStop`.
     *           This field is ignored in `UpdateDeliveryVehicle` calls if the
     *           `current_route_segment` field is empty.
     *     @type \Google\Protobuf\Int32Value $remaining_distance_meters
     *           The remaining driving distance for the `current_route_segment`.
     *           The Driver app typically provides this field, but there are some
     *           circumstances in which Fleet Engine will override the value sent by the
     *           app. For more information, see
     *           [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     *           This field is returned in
     *           `Task.remaining_vehicle_journey_segments[0].driving_distance_meters` (gRPC)
     *           or `Task.remainingVehicleJourneySegments[0].drivingDistanceMeters` (REST)
     *           for all active `Task`s assigned to the Delivery Vehicle.
     *           Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     *           `current_route_segment` field is empty.
     *     @type \Google\Protobuf\Duration $remaining_duration
     *           The remaining driving time for the `current_route_segment`.
     *           The Driver app typically provides this field, but there are some
     *           circumstances in which Fleet Engine will override the value sent by the
     *           app.  For more information, see
     *           [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     *           This field is returned in
     *           `Task.remaining_vehicle_journey_segments[0].driving_duration` (gRPC) or
     *           `Task.remainingVehicleJourneySegments[0].drivingDuration` (REST) for all
     *           active tasks assigned to the Delivery Vehicle.
     *           Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     *           `current_route_segment` field is empty.
     *     @type array<\Google\Maps\FleetEngine\Delivery\V1\VehicleJourneySegment>|\Google\Protobuf\Internal\RepeatedField $remaining_vehicle_journey_segments
     *           The journey segments assigned to this Delivery Vehicle, starting from the
     *           Vehicle's most recently reported location. This field won't be populated
     *           in the response of `ListDeliveryVehicles`.
     *     @type array<\Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleAttribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     *           A list of custom Delivery Vehicle attributes. A Delivery Vehicle can have
     *           at most 100 attributes, and each attribute must have a unique key.
     *     @type int $type
     *           The type of this delivery vehicle. If unset, this will default to `AUTO`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\DeliveryVehicles::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of this Delivery Vehicle.
     * The format is `providers/{provider}/deliveryVehicles/{vehicle}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of this Delivery Vehicle.
     * The format is `providers/{provider}/deliveryVehicles/{vehicle}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The last reported location of the Delivery Vehicle.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleLocation last_location = 2;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation|null
     */
    public function getLastLocation()
    {
        return $this->last_location;
    }

    public function hasLastLocation()
    {
        return isset($this->last_location);
    }

    public function clearLastLocation()
    {
        unset($this->last_location);
    }

    /**
     * The last reported location of the Delivery Vehicle.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleLocation last_location = 2;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation $var
     * @return $this
     */
    public function setLastLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation::class);
        $this->last_location = $var;

        return $this;
    }

    /**
     * The Delivery Vehicle's navigation status.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleNavigationStatus navigation_status = 3;</code>
     * @return int
     */
    public function getNavigationStatus()
    {
        return $this->navigation_status;
    }

    /**
     * The Delivery Vehicle's navigation status.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleNavigationStatus navigation_status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNavigationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleNavigationStatus::class);
        $this->navigation_status = $var;

        return $this;
    }

    /**
     * The encoded polyline specifying the route that the navigation recommends
     * taking to the next waypoint. Your driver app updates this when a
     * stop is reached or passed, and when the navigation reroutes. These
     * `LatLng`s are returned in
     * `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     * (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     * (REST) for all active Tasks assigned to the Vehicle.
     * There are a few cases where this field might not be used to populate
     * `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     * (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     * (REST):
     * * The endpoint of the `current_route_segment` does not match
     * `DeliveryVehicle.remaining_vehicle_journey_segments[0].stop` (gRPC) or
     * `DeliveryVehicle.remainingVehicleJourneySegments[0].stop` (REST).
     * * The driver app has not updated its location recently, so the last
     * updated value for this field might be stale.
     * * The driver app has recently updated its location, but the
     * `current_route_segment` is stale, and points to a previous vehicle stop.
     * In these cases, Fleet Engine populates this field with a route from the
     * most recently passed VehicleStop to the upcoming VehicleStop to ensure that
     * the consumer of this field has the best available information on the
     * current path of the Delivery Vehicle.
     *
     * Generated from protobuf field <code>bytes current_route_segment = 4;</code>
     * @return string
     */
    public function getCurrentRouteSegment()
    {
        return $this->current_route_segment;
    }

    /**
     * The encoded polyline specifying the route that the navigation recommends
     * taking to the next waypoint. Your driver app updates this when a
     * stop is reached or passed, and when the navigation reroutes. These
     * `LatLng`s are returned in
     * `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     * (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     * (REST) for all active Tasks assigned to the Vehicle.
     * There are a few cases where this field might not be used to populate
     * `Task.journey_sharing_info.remaining_vehicle_journey_segments[0].path`
     * (gRPC) or `Task.journeySharingInfo.remainingVehicleJourneySegments[0].path`
     * (REST):
     * * The endpoint of the `current_route_segment` does not match
     * `DeliveryVehicle.remaining_vehicle_journey_segments[0].stop` (gRPC) or
     * `DeliveryVehicle.remainingVehicleJourneySegments[0].stop` (REST).
     * * The driver app has not updated its location recently, so the last
     * updated value for this field might be stale.
     * * The driver app has recently updated its location, but the
     * `current_route_segment` is stale, and points to a previous vehicle stop.
     * In these cases, Fleet Engine populates this field with a route from the
     * most recently passed VehicleStop to the upcoming VehicleStop to ensure that
     * the consumer of this field has the best available information on the
     * current path of the Delivery Vehicle.
     *
     * Generated from protobuf field <code>bytes current_route_segment = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentRouteSegment($var)
    {
        GPBUtil::checkString($var, False);
        $this->current_route_segment = $var;

        return $this;
    }

    /**
     * The location where the `current_route_segment` ends. This is not currently
     * populated by the driver app, but you can supply it on
     * `UpdateDeliveryVehicle` calls. It is either the `LatLng` from the upcoming
     * vehicle stop, or the last `LatLng` of the `current_route_segment`. Fleet
     * Engine will then do its best to interpolate to an actual `VehicleStop`.
     * This field is ignored in `UpdateDeliveryVehicle` calls if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.type.LatLng current_route_segment_end_point = 5;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getCurrentRouteSegmentEndPoint()
    {
        return $this->current_route_segment_end_point;
    }

    public function hasCurrentRouteSegmentEndPoint()
    {
        return isset($this->current_route_segment_end_point);
    }

    public function clearCurrentRouteSegmentEndPoint()
    {
        unset($this->current_route_segment_end_point);
    }

    /**
     * The location where the `current_route_segment` ends. This is not currently
     * populated by the driver app, but you can supply it on
     * `UpdateDeliveryVehicle` calls. It is either the `LatLng` from the upcoming
     * vehicle stop, or the last `LatLng` of the `current_route_segment`. Fleet
     * Engine will then do its best to interpolate to an actual `VehicleStop`.
     * This field is ignored in `UpdateDeliveryVehicle` calls if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.type.LatLng current_route_segment_end_point = 5;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setCurrentRouteSegmentEndPoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->current_route_segment_end_point = $var;

        return $this;
    }

    /**
     * The remaining driving distance for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app. For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_distance_meters` (gRPC)
     * or `Task.remainingVehicleJourneySegments[0].drivingDistanceMeters` (REST)
     * for all active `Task`s assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_distance_meters = 6;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getRemainingDistanceMeters()
    {
        return $this->remaining_distance_meters;
    }

    public function hasRemainingDistanceMeters()
    {
        return isset($this->remaining_distance_meters);
    }

    public function clearRemainingDistanceMeters()
    {
        unset($this->remaining_distance_meters);
    }

    /**
     * Returns the unboxed value from <code>getRemainingDistanceMeters()</code>

     * The remaining driving distance for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app. For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_distance_meters` (gRPC)
     * or `Task.remainingVehicleJourneySegments[0].drivingDistanceMeters` (REST)
     * for all active `Task`s assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_distance_meters = 6;</code>
     * @return int|null
     */
    public function getRemainingDistanceMetersUnwrapped()
    {
        return $this->readWrapperValue("remaining_distance_meters");
    }

    /**
     * The remaining driving distance for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app. For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_distance_meters` (gRPC)
     * or `Task.remainingVehicleJourneySegments[0].drivingDistanceMeters` (REST)
     * for all active `Task`s assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_distance_meters = 6;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setRemainingDistanceMeters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->remaining_distance_meters = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The remaining driving distance for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app. For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_distance_meters` (gRPC)
     * or `Task.remainingVehicleJourneySegments[0].drivingDistanceMeters` (REST)
     * for all active `Task`s assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_distance_meters = 6;</code>
     * @param int|null $var
     * @return $this
     */
    public function setRemainingDistanceMetersUnwrapped($var)
    {
        $this->writeWrapperValue("remaining_distance_meters", $var);
        return $this;}

    /**
     * The remaining driving time for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app.  For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_duration` (gRPC) or
     * `Task.remainingVehicleJourneySegments[0].drivingDuration` (REST) for all
     * active tasks assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration remaining_duration = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRemainingDuration()
    {
        return $this->remaining_duration;
    }

    public function hasRemainingDuration()
    {
        return isset($this->remaining_duration);
    }

    public function clearRemainingDuration()
    {
        unset($this->remaining_duration);
    }

    /**
     * The remaining driving time for the `current_route_segment`.
     * The Driver app typically provides this field, but there are some
     * circumstances in which Fleet Engine will override the value sent by the
     * app.  For more information, see
     * [DeliveryVehicle.current_route_segment][maps.fleetengine.delivery.v1.DeliveryVehicle.current_route_segment].
     * This field is returned in
     * `Task.remaining_vehicle_journey_segments[0].driving_duration` (gRPC) or
     * `Task.remainingVehicleJourneySegments[0].drivingDuration` (REST) for all
     * active tasks assigned to the Delivery Vehicle.
     * Fleet Engine ignores this field in `UpdateDeliveryVehicleRequest` if the
     * `current_route_segment` field is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration remaining_duration = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRemainingDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->remaining_duration = $var;

        return $this;
    }

    /**
     * The journey segments assigned to this Delivery Vehicle, starting from the
     * Vehicle's most recently reported location. This field won't be populated
     * in the response of `ListDeliveryVehicles`.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.VehicleJourneySegment remaining_vehicle_journey_segments = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRemainingVehicleJourneySegments()
    {
        return $this->remaining_vehicle_journey_segments;
    }

    /**
     * The journey segments assigned to this Delivery Vehicle, starting from the
     * Vehicle's most recently reported location. This field won't be populated
     * in the response of `ListDeliveryVehicles`.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.VehicleJourneySegment remaining_vehicle_journey_segments = 8;</code>
     * @param array<\Google\Maps\FleetEngine\Delivery\V1\VehicleJourneySegment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRemainingVehicleJourneySegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\Delivery\V1\VehicleJourneySegment::class);
        $this->remaining_vehicle_journey_segments = $arr;

        return $this;
    }

    /**
     * A list of custom Delivery Vehicle attributes. A Delivery Vehicle can have
     * at most 100 attributes, and each attribute must have a unique key.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.DeliveryVehicleAttribute attributes = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * A list of custom Delivery Vehicle attributes. A Delivery Vehicle can have
     * at most 100 attributes, and each attribute must have a unique key.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.DeliveryVehicleAttribute attributes = 9;</code>
     * @param array<\Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * The type of this delivery vehicle. If unset, this will default to `AUTO`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicle.DeliveryVehicleType type = 10;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this delivery vehicle. If unset, this will default to `AUTO`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicle.DeliveryVehicleType type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle\DeliveryVehicleType::class);
        $this->type = $var;

        return $this;
    }

}

